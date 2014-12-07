#!/usr/bin/env python
# -*- coding: utf-8 -*-
import os
import sys
import tweepy
import json

consumerKey = 'yourKey'
consumerSecret = 'yourSecret'
accessKey = 'yourKey'
accessSecret = 'yourSecret'

auth = tweepy.OAuthHandler(consumerKey, consumerSecret)
auth.set_access_token(accessKey, accessSecret)
api = tweepy.API(auth)

# Istanbul : 2344116
## If you want more : https://dev.twitter.com/discussions/6942
trends = api.trends_place(2344116)

data = trends[0]

trends = data['trends']

names = [trend['name'] for trend in trends]

trendsName = ' | '.join(names)
print(trendsName)

with open('data.txt', 'w') as f:
	json.dump(trendsName, f)
