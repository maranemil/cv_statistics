--  select senators by political party
SELECT COUNT(position) total,UPPER(position)
FROM `cv_senat` GROUP BY position ORDER BY total DESC

-- select senators by political party where no cv found
SELECT COUNT(position) total,UPPER(position)
FROM `cv_senat` WHERE urlpdf IS NULL AND pdf_txt IS NULL
GROUP BY position ORDER BY total DESC

-- select senators by political party with and without cv
SELECT COUNT( UPPER(position) ) FROM `cv_senat` WHERE urlpdf IS NULL AND pdf_txt IS NULL
UNION
SELECT COUNT( UPPER(position) ) FROM `cv_senat`

-- select count from government minister by institution
SELECT COUNT(institution) total, institution FROM cv_minstere GROUP BY institution ORDER BY total DESC

-- select all cv sources into csv
SELECT urlpdf FROM cv_minstere WHERE urlpdf IS NOT NULL UNION SELECT urlpdf2 FROM cv_minstere WHERE urlpdf2 IS NOT NULL UNION
SELECT urlpdf FROM cv_senat WHERE urlpdf IS NOT NULL UNION SELECT urlpdf2 FROM cv_senat WHERE urlpdf2 IS NOT NULL UNION
SELECT urlpdf FROM cv_ccr WHERE urlpdf IS NOT NULL UNION SELECT urlpdf2 FROM cv_ccr WHERE urlpdf2 IS NOT NULL UNION
SELECT urlpdf FROM cv_random WHERE urlpdf IS NOT NULL UNION SELECT urlpdf2 FROM cv_random WHERE urlpdf2 IS NOT NULL UNION
SELECT urlpdf FROM cv_deputati WHERE urlpdf IS NOT NULL UNION SELECT urlpdf2 FROM cv_deputati WHERE urlpdf2 IS NOT NULL UNION