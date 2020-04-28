<?php

namespace PersiLiao;

/**
 * Class Environ
 * @package PersiLiao
 */
class Environ
{

    const PRODUCTION = 'production';
    const PRE_RELEASE = 'prerelease';
    const GRAY = 'gray';
    const TEST = 'test';
    const DEVELOPMENT = 'development';
    const LOCAL = 'local';
    /**
     * Return php.ini -> environ.name
     *
     * @return string
     */
    public static function getName(): string
    {

    }

    /**
     * Return php.ini -> environ.location
     *
     * @return string
     */
    public static function getLocation(): string
    {

    }

    /**
     * Check if environ.name is production
     *
     * @return bool
     */
    public static function isProduction(): bool
    {

    }

    /**
     * Check if environ.name is gray
     *
     * @return bool
     */
    public static function isGray(): bool
    {

    }

    /**
     * Check if environ.name is prerelease
     *
     * @return bool
     */
    public static function isPreRelease(): bool
    {

    }

    /**
     * Check if environ.name is test
     *
     * @return bool
     */
    public static function isTest(): bool
    {

    }

    /**
     * Check if environ.name is development
     *
     * @return bool
     */
    public static function isDevelopment(): bool
    {

    }

    /**
     * Check if environ.name is local
     *
     * @return bool
     */
    public static function isLocal(): bool
    {

    }
}