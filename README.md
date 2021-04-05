# Laravel API Endpoints for Crimedata
Built using Laravel 8

## Instructions
<p>Install Laravel and run <pre>php artisan serve</pre></p>


## The Endpoints

### Location of crimes
<p>Response returns all location data based on crime code. Response also includes pagination data for records over 100.</p>
<pre>/api/address-by-crime/#</pre>

### Number of crimes by crime
<p>Response returns the number of crime occurrences for each crime.</p>

<pre>/api/number-of-crimes-by-crime/#</pre>

### Number of crimes by area
<p>Response returns the number of crime occurrences for each area.</p>
<pre>/api/number-of-crimes-by-area/#</pre>
