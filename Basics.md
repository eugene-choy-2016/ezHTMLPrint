# Basics of ezHTMLPrint
This is a documentation of the methods you can use with ezHTMLPrint. Some of the features will also be explained here.

## Balancing the tags
For tags that require a opening and closing it will usually be represented by a tag_s and tag_e for opening and closing.

For example
```
ezHTMLPrint::html_s(); // <html>
ezHTMLPrint::html_e(); // </html>
```