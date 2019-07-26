WebP Express 0.14.21. Conversion triggered with the conversion script (wod/webp-on-demand.php), 2019-07-22 16:26:00

*WebP Convert 2.1.4*  ignited.
- PHP version: 7.2.0
- Server software: Apache

Stack converter ignited

Options:
------------
The following options have been set explicitly. Note: it is the resulting options after merging down the "jpeg" and "png" options and any converter-prefixed options.
- source: [doc-root]/app/content/themes/ecology/images/general/hero.jpg
- destination: [doc-root]/app/content/webp-express/webp-images/doc-root/app/content/themes/ecology/images/general/hero.jpg.webp
- log-call-arguments: true
- converters: (array of 3 items)

The following options have not been explicitly set, so using the following defaults:
- converter-options: (empty array)
- shuffle: false
- preferred-converters: (empty array)
- extra-converters: (empty array)

The following options were supplied and are passed on to the converters in the stack:
- encoding: "auto"
- metadata: "none"
- near-lossless: 60
- quality: 70
------------


*Trying: vips* 

**Error: ** **Required Vips extension is not available.** 
Required Vips extension is not available.
vips failed in 6 ms

*Trying: gd* 

Options:
------------
The following options have been set explicitly. Note: it is the resulting options after merging down the "jpeg" and "png" options and any converter-prefixed options.
- source: [doc-root]/app/content/themes/ecology/images/general/hero.jpg
- destination: [doc-root]/app/content/webp-express/webp-images/doc-root/app/content/themes/ecology/images/general/hero.jpg.webp
- log-call-arguments: true
- quality: 70

The following options have not been explicitly set, so using the following defaults:
- default-quality: 75
- max-quality: 85
- skip: false

The following options were supplied but are ignored because they are not supported by this converter:
- encoding
- metadata
- near-lossless
------------

GD Version: bundled (2.1.0 compatible)
image is true color
Quality: 70. 
Consider setting quality to "auto" instead. It is generally a better idea
gd succeeded :)

Converted image in 229 ms, reducing file size with 78% (went from 85 kb to 19 kb)
