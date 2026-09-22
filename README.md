# Aircraft Aviation

WordPress theme for the Aircraft Aviation homepage. The site title is **Aircraft Aviation** and the subtitle is **THE AVGEEK AVIATION SOURCE**.

This repository is the theme. On the server it belongs at:

`/wp-content/themes/aircraftaviation`

Weekly homepage copy, links, and photos live in `data/home.json`. The theme loads that file in `aircraftaviation_data()`. There is no build step.

## Deploy to WordPress.com

Use a WordPress.com plan that allows a custom theme (SFTP or theme upload). The destination directory is `/wp-content/themes/aircraftaviation`.

Files the site needs:

- `style.css`
- `functions.php`
- `header.php`
- `footer.php`
- `front-page.php`
- `index.php`
- `page.php`
- `single.php`
- `data/home.json`

`.cursor/` and `docs/` can stay in git. They are not required on the server.

### Upload a zip

1. Put the theme files in a folder named `aircraftaviation`.
2. Zip that folder so `style.css` is at `aircraftaviation/style.css` inside the archive.
3. In WordPress.com, open **Appearance → Themes → Add New → Upload Theme** and upload the zip.
4. Activate **Aircraft Aviation**.

### SFTP

1. Open the site’s SFTP settings in WordPress.com.
2. Upload this theme into `/wp-content/themes/aircraftaviation`.
3. Activate **Aircraft Aviation** under **Appearance → Themes**.

### After activation

1. Open **Settings → Permalinks** and save once, so the Streams (`/streams/`) and Events (`/events/`) archives resolve.
2. Create pages with these slugs so the header links resolve: `news`, `blog`, `how-we-verify`, and `contact`.
3. The public front page uses `front-page.php` on its own. Dashboard in the nav is that front page.

## Homepage

`front-page.php` reads `data/home.json` into three columns:

| Left (25%) | Center (50%) | Right (25%) |
| --- | --- | --- |
| Trip Planning, Live Stream Links | Photo Desk, Aviation News, Trip Reports | Blog / Newsletter button, X feed placeholder, featured live stream, Sidebar news, Upcoming Events |

The photo desk is its own 25% | 50% | 25% grid: three stacked photos, the photo of the day, three stacked photos. On a narrow screen the columns stack into one.

## Custom post types

The theme registers two post types:

- **Stream** — archive at `/streams/`
- **Event** — archive at `/events/`

## Weekly updates

Follow `docs/WEEKLY-CURSOR-TASKS.md`: edit `data/home.json`, draft the newsletter, review on staging, then copy the same files to production at `/wp-content/themes/aircraftaviation`.

Editor rules for this repo are in `.cursor/rules/wordpress.mdc`: change `home.json` for the weekly update, and do not add Node or analytics code to the theme.
