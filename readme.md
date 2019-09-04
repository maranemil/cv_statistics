
## CV (curriculum vitae) Statistics

* Statistics include 164 CVs from total of 315 Romanian politicians profiles.
* 151 politicians (47.94%) didn't made public the resume.
* Romanian political parties in 2019: UDMR, PSD, ALDE, PNL, USR

### Top most frequented Universities by Romanian politicians.

[![Editor Screen](https://raw.github.com/maranemil/cv_statistics/master/charts/cv_top_universities.png)](#features)

### Top activity Romanian politicians by Year.

[![Editor Screen](https://raw.github.com/maranemil/cv_statistics/master/charts/cv_barchart_years.png)](#features)


#### Base conversion

##### install

* sudo apt install docx2txt
* sudo apt install abiword

##### convert

* for file in *.pdf; do pdftotext -layout "$file"; done
* for file in *.docx; do docx2txt "$file"; done
* for file in *.doc; do abiword --to=txt  "$file"; done