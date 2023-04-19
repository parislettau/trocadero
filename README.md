<img src="http://getkirby.com/assets/images/github/plainkit.jpg" width="300">

**Kirby + Easypanel**
Instructions:
1. Create an App in Easypanel.
2. Deploy the App.
3. Add volume mounts for `/var/www/html/content` and `/var/www/html/site/accounts`. This is important or you will lose all content and accounts when the app deploys.
4. Manually upload any existing content to the content file.
5. Add any Domains.
6. Enter the site Domain to `/site/config/config.php` as follows:

```
    <?php
    return [
        'url' => 'https://domain/',
    ];
```

