# Laravel Validation Rules

A set of commonly used validation rules, such as UK Postcodes, Phone numbers and more.

## Installation

You can easily install this package by using Composer. Just run the following command from the root of your 
project.

```
composer require langleyfoxall/laravel-validation-rules
```

## Validation Rules

> If you wish to make changes to any of the validation rules, submit an issue or pull request so it can be discussed.

#### UK Phone Number
Allows validation of all common forms of UK phone numbers including mobile phones and landlines.


**Valid**: `+447222555555` | `+44 7222 555 555` | `(0722) 5555555 #2222`

**Invalid**: `(+447222)555555` | `+44(7222)555555` | `(0722) 5555555 #22`

#### UK Postcode
Easy validation of UK postal codes.

> The postal code validation rule only validates if the postcode is in a valid format. It does not check if the 
postcode actually exists. You will need to use a third party API to validate this.

**Valid**: `ST16 3EL`

**Invalid**: `AAA 1AA`

## Usage

You can easily integrate the custom validation rules by calling the class on the individual attributes
you wish to validate.

You can read more about custom validation classes [here](https://laravel.com/docs/5.7/validation#custom-validation-rules).

Example:
```php
'mobile' => ['nullable', 'string', 'max:255', new UKPhoneNumber()],
```
