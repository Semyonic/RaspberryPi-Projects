#-*- coding: utf-8-*-
#!/usr/bin/env python2.7
import json
import tweepy

consumerKey = 'yourKey
consumerSecret = 'yourSecret'
accessToken = 'yourToken'
accessTokenSecret = 'yourTokenSecret'

auth = tweepy.OAuthHandler(consumerKey, consumerSecret)
auth.set_access_token(accessToken, accessTokenSecret)
api = tweepy.API(auth)

searchFor = raw_input("Enter a keyword for search : ")

class StdOutListener(tweepy.StreamListener):
    def on_data(self, data):
        # returns data in JSON format
        decoded = json.loads(data)

        # convert UTF-8 to ASCII
        print '@%s: %s' % (decoded['user']['screen_name'], decoded['text'].encode('ascii', 'ignore'))
        print ''
        return True

    def on_error(self, status):
        print status

if __name__ == '__main__':
    l = StdOutListener()
    auth = tweepy.OAuthHandler(consumerKey, consumerSecret)
    auth.set_access_token(accessToken, accessTokenSecret)

    stream = tweepy.Stream(auth, l)
    stream.filter(track=[searchFor])
