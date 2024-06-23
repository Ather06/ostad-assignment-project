<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

## Profile Route
The `/profile` endpoint is utilized to retrieve the profile details of a user according to their identification number. Here is how it works:
- **Route**: `/profile/{id}`
- **Controller**: `ProfileController`
- **Method**: `index`

### How It Works
1. The `index` method in `ProfileController` takes the `id` parameter from the route.

2. These variables, along with the `id`, are stored in an associative array `$data`.

3. A cookie named `access_token` is created with value  as `123-XYZ` , minutes as 1, path as ‘/’, domain as $_SERVER[‘SERVER_NAME’], secure as false and httpOnly as true.

4. The method returns the `$data` array as a JSON response with a `200` status code and the created cookie.

<br><br>

This configuration of the route and controller enables the retrieval of user profile details and the establishment of an access token cookie with distinct attributes.


