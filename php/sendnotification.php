<?php
  curl -H "Content-type: application/json" -H "Authorization:key=xAAAAmD7p5M4:APA91bExLJtVk3u9G7g3aEQ8E6FnjfYYT_7uFODidxUEPBgHu3AY8xzjM7hn1ppGS10OHSNbJPZ35pODZZsAG5iFGldjwG_EzVZhHvXsUGZTUbmj1ilxcEBpCKBKmYeEnotLBdMKKNXb"  -X POST -d '{ "to": "/topics/news","data": { "message": "This is a Firebase Cloud Messaging Topic Message!"}}' https://fcm.googleapis.com/fcm/send
?>