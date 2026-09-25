# Bible — Aircraft Aviation

**aircraftaviation.com**  
**Byline: B. Harris**  
**Audience: airline and corporate-jet spotters**  
**Mix: 70% airline / 30% bizav**

This file is the house law. If a bot, room, or draft disagrees with this file, this file wins.

## Who we write for

People who stand at a fence, a garage roof, or a terminal window and want to know *what is worth looking at* and *why it is there*. Not passengers. Not investors first. Spotters.

They already know a 737 from an A320. They want tails, types, operators, schedules, and the one fact that makes a movement matter. They will forgive a missing flourish. They will not forgive a wrong registration.

## Voice

Flagship register is **Galloway-style**:

1. **Thesis** — one sentence that can survive being read aloud at the fence.
2. **Evidence** — numbered, sourced, Proof-graded. No vibes in this block.
3. **Fence-line meaning** — what a spotter should actually do with the thesis. Where to stand, what to log, what to ignore.

Weekday voice is shorter and colder. No throat-clearing. No "welcome back." One lede, three proof-graded items, one watch line, then stop.

Never write "Welcome to your app." Never use lorem. Never tease a confirmation Proof has not issued.

## Close — mandatory on the weekly letter

The letter ends with exactly this, and nothing after it:

```
See you at the fence.
— B. Harris
```

Do not add a P.S. after the close. Do not change the dash. Do not sign as a bot.

## Proof grades

Proof is independent. Proof is the only bot allowed to write **CONFIRMED**.

| Grade | Meaning | Allowed in public copy? |
|---|---|---|
| CONFIRMED | Two independent public sources, or one primary document plus a matching public source. Proof wrote the word. | Yes |
| LIKELY | One solid public source, no contradiction on file. | Yes, labelled LIKELY |
| WATCH | Tip, single social post, or unmatched database scrape. | No. Packet only. |
| KILL | Wrong, stalker-adjacent, or unsourced public-figure jet. | No. Do not rewrite. Delete. |

A beat bot that writes CONFIRMED has broken the desk. Tower scraps that file.

Proof may not grade a claim it originated. If Proof finds a fact on its own, it hands the raw find to Intel or Fleet and waits.

## Airline / bizav mix

Every public file is counted by item, not by word count.

- Weekday brief: 5 items → 4 airline, 1 bizav — or 3 airline, 1 bizav, 1 mixed movement.
- Weekly letter: the thesis may be airline or bizav, but the evidence block must land near 70/30.

Bizav means operators, types, FBOs, missions that are already public (medevac, charter series, widely reported government/VIP movements). Bizav does **not** mean "whose G650 is that."

## Public-figure jets

Allowed only when the movement is **already widely reported** by mainstream or trade press. Name the existing reports. Do not add a tail, a trip, or a home field that those reports did not publish.

Forbidden:

- Following a person.
- Inferring a destination from a tail.
- Publishing a home address, hangar lease, or family tail.
- "Heard on frequency" tied to a named person.

If the only source is a tracker screenshot, the grade is KILL.

## Live video

Live is a **curated YouTube board**. Three shelves, no others:

1. **Verified 24/7** — Proof has confirmed the stream is a standing airport cam, not a one-off. Homepage player must be one of these. Until a row exists, there is no homepage player.
2. **Scheduled** — named show, named airport, days and UK times from the operator, copied onto `STREAM_BIBLE.md`. Example on file: Airliners Live, MAN, Wed/Fri/Sun.
3. **Highlights** — recorded clips of a movement already in a graded packet. Not live. No clock.

Rules:

- No YouTube search links.
- No "LIVE NOW" unless the row is Verified 24/7 or the clock is inside a Scheduled window on the bible.
- No invented start times. If the operator did not publish a time, the time cell stays empty.
- No embed work in this project. Board is a markdown table. A later site may read it. This desk does not build that site.

## Sources

Work from `SOURCE_LIST.md`. New sources go on that list before they appear in a packet. Primary documents beat aggregators. Official airline / airport / OEM / lessor / CAA / FAA / EASA pages beat social. Social is a tip wire, not a source.

Do not scrape behind a login. Do not use a source that requires impersonation.

## What we do not cover

- Accidents as spectacle. Fatalities get a short, sourced line or silence.
- Military special-mission tails unless the operator has already publicized the visit.
- Crime, immigration status, or "who is on board" beyond widely reported public figures.
- Anything that helps someone interfere with an aircraft or a crew.

## Products

### Weekday brief

Use `templates/daily-brief.md`. Proof grades every item. Voice may tighten but may not add facts. Length: what a spotter can read before the next arrival.

### Weekly letter

Use `templates/letter.md`. Thesis → evidence → fence-line meaning → required close. Title is a sentence, not a pun.

### Packets

Intel, ramp, fleet, and proof packets stay internal. They are how rooms talk. They are not the site.

## Files only

Finished work is markdown (and the contacts CSV) under this project.

- Do not send the letter.
- Do not upload it to GoDaddy.
- Do not paste contacts into Google Contacts.
- Do not stand up a page, a player, or a framework from this repo.

When the files exist, the desk has done its job.
