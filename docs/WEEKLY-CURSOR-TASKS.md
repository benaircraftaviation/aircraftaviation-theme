# Weekly Cursor tasks

Use this checklist once a week. Edit content in `data/home.json`. Leave the PHP templates alone unless a section is broken.

## 1. Update `data/home.json`

- Set `updated` to today’s date (`YYYY-MM-DD`).
- Photo desk: replace the photo of the day, then the 3 left photos and the 3 right photos. Each photo needs `src`, `alt`, and `caption`.
- Aviation News: replace the center-column stories (`title`, `url`, `source`, `date`, `summary`).
- Trip Reports: replace `title`, `url`, `route`, and `summary`.
- Sidebar news: replace the short right-column items.
- Featured live stream: set `name`, `url`, `status`, and `description` to the stream you want highlighted.
- Upcoming Events: set `title`, `url`, `date`, and `location`.
- Change Trip Planning or Live Stream Links only when a destination URL changes. The standing links are Google Flights, AeroLOPA, Great Circle Mapper, Airline Videos Live, NYC Aviation, Caveman Aviation, and LA Flights.

## 2. Draft the newsletter

- Write the weekly newsletter in WordPress (title, intro, and the links you want readers to open).
- Publish it on staging first, or leave it as a draft until staging looks right.
- Point `newsletter.button` and `newsletter.url` at that post. Use a root-relative path such as `/blog/your-post-slug/` for a post on this site.
- Keep `newsletter.text` to the one-line description shown on the homepage.

## 3. Staging

- Upload the theme, or just the updated `data/home.json`, to the staging site at `/wp-content/themes/aircraftaviation`.
- Open the homepage and check all three columns: trip planning, live streams, photo desk (3 + photo of the day + 3), aviation news, trip reports, newsletter button, X placeholder, featured stream, sidebar news, and upcoming events.
- Click the newsletter button and confirm it lands on the draft or the staging post.
- Confirm photos load and that captions still describe the image.

## 4. Production

- After staging looks right, copy the same `data/home.json` (and any new theme files) to production at `/wp-content/themes/aircraftaviation`.
- Reload the public homepage and repeat the same click-through: newsletter, featured stream, and one news link.
- Do not add analytics snippets, tag managers, or tracking pixels while you update.
