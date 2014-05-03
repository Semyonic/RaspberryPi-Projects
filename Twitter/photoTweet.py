# -*- coding: utf-8 -*-
#!/usr/bin/env python2.7  
import tweepy  
from subprocess import call  
from datetime import datetime  
   
# Date-Time stamps
tm = datetime.now()                
now = tm.strftime('%Y%m%d-%H%M%S')  
photo_name = now + '.jpg'  
cmd = 'sudo raspistill -v -vf -mm spot -q 100 -w 1024 -h 768 -o /home/pi/' + photo_name   
call ([cmd], shell=True)  
  
# 0Auth Keys
CONSUMER_KEY = 'yourKey'
CONSUMER_SECRET = 'yourSecret'
ACCESS_KEY = 'yourKey'
ACCESS_SECRET = 'yourSecret'

auth = tweepy.OAuthHandler(CONSUMER_KEY, CONSUMER_SECRET)
auth.set_access_token(ACCESS_KEY, ACCESS_SECRET)
api = tweepy.API(auth)
  
# Send the tweet with photo  
photo_path = '/home/pi/' + photo_name  
status = 'Photo auto-tweet from RaspberryPi: ' + i.strftime('%Y/%m/%d %H:%M:%S')   
api.update_with_media(photo_path, status=status)
