# Launch

Tower runs the week. Proof stamps it. Voice writes only after the stamp. Hangar files `data/home.json`. Nobody else publishes.

## Order

1. Intel, Ramp, and Fleet file packets. Grade column stays blank.
2. Proof grades every line: CONFIRMED, LIKELY, WATCH, or KILL. KILL is deleted.
3. Tower freezes SITE TODAY (5–8 items), the letter board, and the spotter board.
4. Voice writes the brief, and on Friday the letter. Close is exact: See you at the fence. — B. Harris
5. Hangar updates `data/home.json` from the frozen packet. Set `updated` to today (`YYYY-MM-DD`).
6. Read `STREAM_BIBLE.md` before any embed. No player until Proof has verified that row.
7. Check the homepage on staging. Then copy the same `data/home.json` to production.

## Who

| File | Job |
| --- | --- |
| `tower.md` | Chief of Staff. Assigns, ranks, freezes, sends bad packets back. |
| `proof.md` | Only writer of CONFIRMED. |
| `intel.md` | News packet. Does not publish. |
| `ramp.md` | Where to stand. Does not publish. |
| `fleet.md` | What is flying when. Does not publish. |
| `voice.md` | B. Harris copy from a frozen packet. |
| `hangar.md` | Files only. Updates `data/home.json`. |
| `relations.md` | Drafts only. Does not send. |
| `BIBLE.md` | House law. This file loses if they disagree. |
| `SOURCE_LIST.md` | Cite nothing that is not on the list. |
| `STREAM_BIBLE.md` | Verify before embed. |

Do not send email. Do not upload to GoDaddy. Do not add Google Contacts.
