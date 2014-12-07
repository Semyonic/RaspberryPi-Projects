# -*- coding: utf-8 -*-
#!/usr/bin/env python
import os
import sys
import tweepy

CONSUMER_KEY = 'yourKey'
CONSUMER_SECRET = 'yourSecret'
ACCESS_KEY = 'yourKey'
ACCESS_SECRET = 'yourSecret'

auth = tweepy.OAuthHandler(CONSUMER_KEY, CONSUMER_SECRET)
auth.set_access_token(ACCESS_KEY, ACCESS_SECRET)
api = tweepy.API(auth)

if len(sys.argv) >= 2:  
    tweetText = sys.argv[1]  
  
else:  
    tweetText = "bot@home : Test message)"  
  
if len(tweetText) <= 140:  
    api.update_status(tweetText)  
else:  
    print "140 chars Max !"
