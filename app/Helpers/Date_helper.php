<?php

defined('BASEPATH') OR exit('No direct script access allowed');

if ( ! function_exists('data_atual'))
{
    function data_atual()
    {
        return date('Y-m-d');
    }
}

if ( ! function_exists('hora_atual'))
{
    function hora_atual()
    {
        return date('H:i:s');
    }
}

if ( ! function_exists('data_hora_atual'))
{
    function data_hora_atual()
    {
        return date('Y-m-d H:i:s');
    }
}