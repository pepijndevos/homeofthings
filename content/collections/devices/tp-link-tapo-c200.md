---
id: e90d9f5e-6571-4a9a-afbb-38e2c1c9d9d2
blueprint: device
title: 'Tapo C200'
device_image:
  - tapo-c200_eu_1.0_1908_english_01_normal_1568705560286e.png
reviews:
  -
    id: m2w46lod
    video: 'https://www.youtube.com/watch?v=5Dweg6myRw8'
  -
    id: m2w46oqi
    video: 'https://www.youtube.com/watch?v=50v11ib2XMQ'
shopping_links:
  bol.com: 'https://www.bol.com/nl/p/tp-link-tapo-c200-pan-tilt-home-security-wi-fi-ip-camera/9200000121272802/'
  mediamarkt.nl: 'https://www.mediamarkt.nl/nl/product/_tapo-tapo-c200-ip-camera-1645611.html'
  bcc.nl: 'https://www.bcc.nl/tp-link-beveiligingscamera-tapo-c200/282038'
  amazon.nl: 'https://www.amazon.nl/TP-Link-Tapo-C200-Bewakingscamera-SD-Kaart/dp/B07XLML2YS'
classifications:
  - local
  - free
  - cloud-api
datalinks:
  - wifi
categories:
  - security-camera
brands:
  - tp-link
power:
  - mains
updated_by: 082753cc-9bb3-461d-9de0-42dab6bb9a8d
updated_at: 1730457121
platforms:
  - onvif
---
The Tapo C200 is a smart camera with 1080p HD video, 360° horizontal and 114° vertical range, night vision, motion detection, and two-way audio. It supports microSD card and cloud storage, privacy mode, voice control, and baby crying detection.

### Home Assistant integration

After enabling the local API in the official app, the video stream can be accessed via ONVIF. An unofficial integration exists to control pan/tilt and other features, but only on older firmware.

- [Tapo: Cameras Control](https://github.com/JurajNyiri/HomeAssistant-Tapo-Control)
- [ONVIF](https://www.home-assistant.io/integrations/onvif)
- [WebRTC Camera](https://github.com/AlexxIT/WebRTC)