use main;
UPDATE
    news,
    news_images
SET
    news.LinkImage = news_images.LinkImage,
    news.AltImage = news_images.AltImage
WHERE
        news.identifier = news_images.identifier;

UPDATE
    news,
    news_dates
SET
    news.FullDate = news_dates.FullDate,
    news.UpdateDate = news_dates.UpdateDate,
    news.UploadDate = news_dates.UploadDate
WHERE
        news.identifier = news_dates.identifier;

UPDATE
    news,
    news_themes
SET
    news.Theme = news_themes.Theme,
    news.ThemePrincipal = news_themes.ThemePrincipal
WHERE
        news.identifier = news_themes.identifier;