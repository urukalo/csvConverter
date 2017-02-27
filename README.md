# csvConverter

simple csv converter to any format defined by template

- converter read cvs header (firs line) for colons names and use them for template
in format:

``` 
[
    "name" => 'colon_name',
    "value" => 'colon_value'
]
```

## Getting Started

just run a command, look down at usage example

### Usage

here is one example to run on console:

```
   >  ./composer.phar csvConvert -- path/to/passwords.csv path/to/exported.xml template.html
        
```

package coming with MacPass xml template, and example passwords.csv with proper header 
(just export csv from google passwords and adjust header like in example) 

## Running the tests

nope

### Break down into end to end tests

nope

```
nope
```

### And coding style tests

nope

```
nope
```

## Deployment

nope

## Built With

* nope

## Contributing

Please read [CONTRIBUTING.md](CONTRIBUTING.md) for details on our code of conduct, and the process for submitting pull requests to us.

## Versioning

We use [SemVer](http://semver.org/) for versioning. For the versions available, see the [tags on this repository](https://github.com/urukalo/csvConverter/tags). 

## Authors

* **Milan Urukalo** - *Initial work* - [urukalo](https://github.com/urukalo)

See also the list of [contributors](https://github.com/urukalo/csvConverter/contributors) who participated in this project.

## License

This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details

## Acknowledgments

* none
