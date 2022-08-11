<h1 align="center">
  <br>
  <a href="https://www.sphere-360.com"><img src="https://www.sphere-360.com/assets/img/sphere/Logo_sphere_360_small.png" alt="Sphere 360° Logo" width="200"></a>
  <br>
  Sphere 360°
  <br>
</h1>

<h4 align="center">An easy DATA CHECKING API.</h4>


## About
Sphere 360° API for data verification - fake and temp emails &amp; phone numbers

This code snippet allows you to implement an API connection to sphere-360.com to verify emails for spam, temporary or other reasons of abuse or provide details about a requested phone number. 
Add this feature to your forms and improve the quality and authenticity of your form data.
A free API code is required to use this API. You can get this code when you register on sphere-360.com.
*Some features are only with a premium key accessible.

Compared to other APIs, we work only with SSL POST requests to increase data security. This service was developed in Germany.


## How To Use

Add this php snippet to your webform and use the API-response to handle your next decisions. It is up to you how you want to use the response of our API.  

```bash
# Add the PHP Snippet to your page first.

# Call the function with your data request & api_key
$my_array = Sphere_API_Function($input_data, "your_api_key_1234567890", true); 

# check $my_array with the response

# use the response for your next steps

```

## Response Fields

```bash
- $my_array['request_provided'];
- $my_array['request_type'];
- $my_array['spam_result'];
- $my_array['spam_result_str'];
- $my_array['spam_result_type'];
- $my_array['error'];
- $my_array['error_details'];
- $my_array['api_version'];
- $my_array['account_package'];
- $my_array['account_query_status'];
- $my_array['domain_name'];
- $my_array['domain_tld_name'];
- $my_array['phone_number'];
- $my_array['phone_prefix'];
- $my_array['phone_city'];
- $my_array['phone_country_en'];
- $my_array['phone_country_de'];
- $my_array['phone_country_iso2'];
- $my_array['phone_country_iso3'];
- $my_array['phone_continent'];
- $my_array['phone_zone'];
- $my_array['phone_number_format_international'];
- $my_array['phone_number_format_national'];
- $my_array['phone_number_format_RFC3966'];
- $my_array['phone_number_initial_provider'];
- $my_array['phone_number_timezone'];
- $my_array['phone_number_type'];
```


> **Note**
> Some fields will be empty if no data are available or a premium key is required to get this answer.


## Download

You can download the last snippet from this repository

## Data Privacy

You don't want to send a full e-mail address to our servers for checking? Here you can use our e-mail splitter to remove the personal section of the e-mail, just the domain will be checked instead.

```bash
if(filter_var($entered_email, FILTER_VALIDATE_EMAIL)) {
	
  //Separate the domain at the @ sign. 
  list($personal_part, $domain_part) = explode("@", $entered_email);

  //$personal_part = Max.Mustermann
  //$domain_part = example.com

  //Copy the domain_part into a User_Variable.
   $domain_only = $domain_part; // -> example.com

}
```

## Support & More Information

For support and more information you can visit our website <a href="https://www.sphere-360.com">Sphere-360.com</a>

## You may also like...

- [data-reporting-api](https://github.com/Sphere-360/) - Automatically report fake, temporary or other abuse data to our investigation center
- [Sphere-360 Blog | DE](https://blog.sphere-360.com/) - Our blog around the topic and data verification (German language only)

## License

MIT
