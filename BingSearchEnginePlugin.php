<?php
namespace SearchPortal\Plugins;

class BingSearchEnginePlugin implements SearchEnginePluginInterface {
    /**
     * Gets the slug for the search engine.
     *
     * @return string
     */
    public function getSlug() {
        return 'bing';
    }

    /**
     * Gets the display name of the search engine.
     *
     * @return string
     */
    function getDisplayName()
    {
        return 'Bing';
    }

    /**
     * Constructs the search URL.
     *
     * @param $query string Query string to search for
     * @return string
     */
    function constructSearchUrl($query)
    {
        return 'http://www.bing.com/search?q=' . $query;
    }
}