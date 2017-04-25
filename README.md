# SRB-api

API for SRB using PHP.

*******************************************Video Methods*******************************************
   
Get video by id.
HTTP method: GET
Endpoints:  api/videos/Id
@param int $id
     

Get all videos for a user.
HTTP method: GET
Endpoint: api/users/videos/id
@param int $id


Get all videos by lat long coordinates.
HTTP method: GET
Endpoint: api/latlong/videos/swLat/swLong/neLat/neLong
@param float $swLat float $swLong float $neLat float $neLong


Search videos by title term
HTTP method: GET
Endpoints:  api/searchByTitle/videos/search_term
@param string search_term


