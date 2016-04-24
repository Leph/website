<?php

/**
 * Parse a bibtex entry
 */
function parseEntry($bib, $entry)
{
    $pos = strpos($bib, $entry);
    if ($pos === false) {
        return null;
    } else {
        $offset = strlen($entry) + 2;
        $pos2 = strpos($bib, '}', $pos+$offset);
        return substr($bib, $pos+$offset, $pos2-($pos+$offset));
    }
}

/**
 * Find and replace name with strong tag
 */
function highlightName($text)
{
    return str_replace('Rouxel, Quentin', '<strong>Rouxel, Quentin</strong>', $text);
}

/**
 * Parse and return bibtex database
 */
function parseBibtex()
{
    $database = file_get_contents('var/publications.bib');
    $entries = explode('@', $database);
    $data = array();
    foreach ($entries as $entry) {
        $pos1 = strpos($entry, '{');
        $pos2 = strpos($entry, ',');
        if ($pos1 === false || $pos2 === false) {
            continue;
        }

        $class = substr($entry, 0, $pos1);
        $name = substr($entry, $pos1+1, $pos2-$pos1-1);
        if (!file_exists('papers/'.$name.'.pdf')) {
            $name = null;
        }

        $info = array(
            'class' => $class,
            'name' => $name,
            'title' => parseEntry($entry, 'title'),
            'author' => parseEntry($entry, 'author'),
            'institution' => parseEntry($entry, 'institution'),
            'booktitle' => parseEntry($entry, 'booktitle'),
            'year' => parseEntry($entry, 'year'),
            'type' => parseEntry($entry, 'type'),
            'url' => parseEntry($entry, 'url'),
            'abstract' => parseEntry($entry, 'abstract'),
            'bibtex' => '@'.$entry,
        );
        array_unshift($data, $info);
    }

    return $data;
}

