#!/usr/bin/env python
# -*- coding: utf-8 -*-
import os
import sys
import tweepy
import json

trends = raw_input("Enter hashtag for search : ")

consumerKey = 'yourKey'
consumerSecret = 'yourSecret'
accessKey = 'yourKey'
accessSecret = 'yourSecret'

auth = tweepy.OAuthHandler(consumerKey, consumerSecret)
auth.set_access_token(accessKey, accessSecret)
api = tweepy.API(auth)

results = api.search(trends)

for result in results:
	print result.text
