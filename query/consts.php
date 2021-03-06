<?php
const PROTOCOL_VERSION = 0x10;
const STATUS_REQUEST = 0x03;
const GAME_SERVER_STATUS_RESPONSE = 0x04;
const MASTER_SERVER_STATUS_RESPONSE = 0x06;
const GAME_INFO_REQUEST = 0x07;
const GAME_INFO_RESPONSE = 0x08;

const GAME_STATUS_PROTECTED = 0b00000001;
const GAME_STATUS_DEDICATED = 0b00000010;
const GAME_STATUS_UNKNOWN1 = 0b00000100; // always on for some reason
const GAME_STARTED = 0b00001000;
const GAME_DYNAMIX_LOGO = 0b00010000;
const GAME_WON_LOGO = 0b00100000;
const GAME_STATUS_UNKNOWN2 = 0b01000000;
const GAME_STATUS_UNKNOWN3 = 0b10000000;
