# Beats

Audience: airline and corporate-jet spotters.  
Mix target: **70% airline / 30% bizav** on every public file.

A beat is a lane, not a column. Overlap is handed to Tower. Facts still go through Proof.

## Airline (about 70%)

| Beat | Owner bot | Packet | Typical fence-line question |
|---|---|---|---|
| Network and flying programme | Intel, Signal | packet-intel | What is new in the book this week, and will it show at this field? |
| Fleet in and out | Fleet | packet-fleet | New type, first visit, last visit, conversion, teardown |
| Money that moves metal | Money | packet-intel (money section) | Why is this airframe here — order, lease, storage, or scrap? |
| Ramp, global | Ramp | packet-ramp | What is on the concrete that is not in the brochure? |
| Ramp, North America | Ramp NA | packet-ramp | Same, US/CA/MX |
| Ramp, Europe | Ramp EU | packet-ramp | Same, Europe + UK + non-EU Europe |
| Ramp, Middle East & Africa | Ramp MEA | packet-ramp | Same, MEA |
| Ramp, Asia-Pacific | Ramp APAC | packet-ramp | Same, APAC |
| Ramp, Latin America | Ramp LATAM | packet-ramp | Same, LATAM + Caribbean |
| Odd metal | Oddities | packet-intel or packet-ramp | One-off type, hybrid livery, unexpected operator |

## Bizav (about 30%)

| Beat | Owner bot | Packet | Typical fence-line question |
|---|---|---|---|
| Bizav operators and types | Bizav | packet-intel (bizav section) | Which cabin and which operator are actually moving? |
| Bizav ramp | Ramp + regional ramps | packet-ramp | FBO arrivals that are public and not a person-hunt |
| Public-figure jets | Bizav, then Proof | packet-proof | Only if already widely reported. Otherwise KILL |
| Bizav fleet and OEMs | Fleet + Bizav | packet-fleet | GAMA numbers, new types, demo tours the OEM posted |

## Desk beats (not scored in the mix)

| Beat | Owner bot | Output |
|---|---|---|
| Assignments and mix | Tower | Room opens, kill list |
| Grades | Proof | packet-proof |
| Voice and close | Voice | daily-brief, letter |
| Board and archive | Hangar | STREAM_BIBLE, output/ |
| File-only outreach | Relations | contacts.csv rows, letter.md drafts |

## Coverage rules by beat

**Airline network.** Routes, frequencies, wet-lease, ACMI, seasonal returns. Cite the airline or the airport. A booking-site screenshot is WATCH.

**Fleet.** Deliveries, retirements, storage, freighter conversion, lessor placements, paint. Tail and type when the operator or registry has them.

**Money.** Capacity, fuel, labor, orders, parked fleets, airport charges — only when the money explains metal a spotter can see. This is not an equity letter.

**Ramp.** What is on the field: visitors, diversions (airport-confirmed), maintenance visitors, stored lines you can legally see from a public point. No airside trespass tips.

**Oddities.** Rare type, mixed fleet, special scheme, first revenue visit. Still needs a source. "I think I saw" is WATCH.

**Bizav.** Operators, types, events, OEM news. Public-figure movements only after mainstream or trade press has already named the trip. No stalking. No home-field dossiers.

**Signal.** The week's pressure: weather programs, flow control the ANSP posted, runway work, show weeks, holiday banks. Signal proposes; Proof grades; Voice may use one watch line.

## Geographic split for ramp

Ramp (08) is the editor, not a sixth region. Regional bots file first. Ramp merges and cuts duplicates. A transatlantic visitor is filed once, in the region where the spotter can see it *this week*.

## Mix audit

Before Voice writes, Tower counts items:

- Airline items / total items ≥ 0.65 and ≤ 0.80.
- At least one bizav item in a weekday brief unless Proof killed every bizav line.
- A letter whose evidence block is 100% airline is incomplete, not "focused."
