---
id: 86650b8f-a471-47ae-9f8a-b1f50f776feb
blueprint: device
title: 'Home Short String Inverter'
device_image:
  - string-invrter.jpg
platforms:
  - modbus
classifications:
  - cloud-api
  - free
  - local
datalinks:
  - ethernet
  - wifi
brands:
  - solaredge
power:
  - mains
updated_by: 082753cc-9bb3-461d-9de0-42dab6bb9a8d
updated_at: 1730477901
categories:
  - solar-inverter
---
Our optimised solution for small-scale residential projects. The SolarEdge Home Short String Inverter provides greater design flexibility by enabling significantly shorter strings for low power three phase PV systems. The inverter is optimised for installations with complex roofs, including multi-facets and different orientations.

### Home Assistant integration

This device has an well supported cloud and Modbus API, and an unofficial Protobuf API. In recent firmware versions the Protobuf API has been disabled and the Modbus API is only exposed over Ethernet. Modbus over Ethernet is the most reliable local API, but does not expose individual panel performance. On WiFi the cloud API might be the only reliable option, unless you're on an older firmware.

- [SolarEdge](https://www.home-assistant.io/integrations/solaredge/) uses their cloud API
- [SolarEdge Local](https://www.home-assistant.io/integrations/solaredge_local/) uses the Protobuf API
- [SolarEdge Modbus](https://github.com/msvisser/remeha_home) third party Modbus integration
- [Modbus](https://www.home-assistant.io/integrations/modbus/) generic official Modbus integration