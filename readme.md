
### CV Statistics

#### Base conversion

##### install

* sudo apt install docx2txt
* sudo apt install abiword

##### convert

* for file in *.pdf; do pdftotext -layout "$file"; done
* for file in *.docx; do docx2txt "$file"; done
* for file in *.doc; do abiword --to=txt  "$file"; done