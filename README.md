# Laravel API Endpoints for Crimedata
<p>Built using Laravel 8</p>

## Instructions
<p>Install Laravel, run migrations and then run <pre>php artisan serve</pre></p>


## The Endpoints

Explanation of data can be found here: [https://data.lacity.org/Public-Safety/Crime-Data-from-2020-to-Present/2nrs-mtv8](https://data.lacity.org/Public-Safety/Crime-Data-from-2020-to-Present/2nrs-mtv8)

### Location of crimes
<p>Response returns all location data based on crime code. Response also includes pagination data for records over 100.</p>
<pre>/api/address-by-crime/{crm_cd}</pre>

<pre>http://13.57.41.9/api/address-by-crime/110</pre>
### Number of crimes by crime
<p>Response returns the number of crime occurrences for each crime.</p>

<pre>/api/number-of-crimes-by-crime/{crm_cd}</pre>
<pre>http://13.57.41.9/api/number-of-crimes-by-crime/110</pre>
### Number of crimes by area
<p>Response returns the number of crime occurrences for each area.</p>
<pre>/api/number-of-crimes-by-area/{area}</pre>
<pre>http://13.57.41.9/api/number-of-crimes-by-area/01</pre>
