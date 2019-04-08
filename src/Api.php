<?php
/**
 * Created by PhpStorm.
 * User: Matthew
 * Date: 22/04/2016
 * Time: 5:55 PM
 */

namespace Mpclarkson\Laravel\Freshdesk;

use Freshdesk\Api as Freshdesk;

class Api {

    /**
     * @var Freshdesk
     */
    private $api;

    /**
     * Api constructor.
     * @param $key
     * @param $domain
     */
    public function __construct($key, $domain)
    {
        $this->api = new Freshdesk($key, $domain);
    }

    /**
     * @return \Freshdesk\Resources\Agent
     */
    public function agents()
    {
        return $this->api->agents;
    }

    /**
     * @return \Freshdesk\Resources\Company
     */
    public function companies()
    {
        return $this->api->companies;
    }

    /**
     * @return \Freshdesk\Resources\Contact
     */
    public function contacts()
    {
        return $this->api->contacts;
    }

    /**
     * @return \Freshdesk\Resources\Group
     */
    public function groups()
    {
        return $this->api->groups;
    }

    /**
     * @return \Freshdesk\Resources\Ticket
     */
    public function tickets()
    {
        return $this->api->tickets;
    }

    /**
     * @return \Freshdesk\Resources\TimeEntry
     */
    public function timeEntries()
    {
        return $this->api->timeEntries;
    }

    /**
     * @return \Freshdesk\Resources\Conversation
     */
    public function conversations()
    {
        return $this->api->conversations;
    }

    /**
     * @return \Freshdesk\Resources\Category
     */
    public function categories()
    {
        return $this->api->categories;
    }

    /**
     * @return \Freshdesk\Resources\Forum
     */
    public function forums()
    {
        return $this->api->forums;
    }

    /**
     * @return \Freshdesk\Resources\Topic
     */
    public function topics()
    {
        return $this->api->topics;
    }

    /**
     * @return \Freshdesk\Resources\Comment
     */
    public function comments()
    {
        return $this->api->comments;
    }
    /**
     * @return \Freshdesk\Resources\EmailConfig
     */
    public function emailConfigs()
    {
        return $this->api->emailConfigs;
    }

    /**
     * @return \Freshdesk\Resources\Product
     */
    public function products()
    {
        return $this->api->products;
    }

    /**
     * @return \Freshdesk\Resources\BusinessHour
     */
    public function businessHours()
    {
        return $this->api->businessHours;
    }

    /**
     * @return \Freshdesk\Resources\SLAPolicy
     */
    public function slaPolicies()
    {
        return $this->api->slaPolicies;
    }

    /**
     * Check if a specific header exists in the API response.
     *
     * @param string $name
     * @return string|null
     */
    public function hasHeader($name)
    {
        return $this->api->hasHeader($name);
    }

    /**
     * Get the value of a response header.
     *
     * @param string $name
     * @return string|null
     */
    public function getHeader($name)
    {
        return $this->api->getHeader($name);
    }

    /**
     * @return \Freshdesk\Resources\Solution
     */
    public function solutionCategories($endPoint = null, $locale = null)
    {
        return $this->api->solutions->categories($endPoint, $locale);
    }

    /**
     * @return \Freshdesk\Resources\Solution
     */
    public function solutionFolders($id, $endPoint = null, $locale = null)
    {
        return $this->api->solutions->folders($id, $endPoint, $locale);
    }

    /**
     * @return \Freshdesk\Resources\Solution
     */
    public function solutionArticles($id, $endPoint = null, $locale = null)
    {
        return $this->api->solutions->articles($id, $endPoint, $locale);
    }
}
