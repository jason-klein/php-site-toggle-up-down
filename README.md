# PHP Site Toggle Up Down

Very basic PHP website that can be toggled up (200 OK) and down (403 Unauthorized) by visitors. Great way to test active/passive failover configuration. Setup this site as your primary site and toggle up/down to test your configuration.

Note: This code assumes your server returns 403 when "index.html" file is absent. If your web server returns an Index Page listing files and directories when "index.html" is not present, disable the Index option (e.g. "Options Indexes" on Apache 2).

