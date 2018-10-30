# Laravel Validation Rules

A set of commonly used validation rules, such as UK Postcodes, Phone numbers and more.

[![Latest Stable Version](https://badgen.net/github/release/langleyfoxall/laravel-validation-rules)](https://packagist.org/packages/langleyfoxall/laravel-validation-rules)
[![Total Downloads](https://badgen.net/packagist/dt/langleyfoxall/laravel-validation-rules)](https://packagist.org/packages/langleyfoxall/laravel-validation-rules)

## Installation

You can easily install this package by using Composer. Just run the following command from the root of your 
project.

```
composer require langleyfoxall/laravel-validation-rules
```

## Validation Rules

> If you wish to make changes to any of the validation rules, submit an issue or pull request so it can be discussed.


| Name                   | Class Name                   | Description                                    |
| -----------------------|:-----------------------------|:-----------------------------------------------|
| UK Postal Codes        | UKPostcode                   | Easy validation of UK postal codes.
| UK Phone Numbers       | UKPhoneNumber                | Validation of UK mobile phones and landlines.

## Usage

You can easily integrate the custom validation rules by calling the class on the individual attributes
you wish to validate.

You can read more about custom validation classes [here](https://laravel.com/docs/5.7/validation#custom-validation-rules).

Example:
```php
'mobile' => ['nullable', 'string', 'max:255', new UKPhoneNumber()],
```
