# -*- coding: utf-8 -*-
import vk_api, time

login, password = '', ''
vk_session = vk_api.VkApi(login, password)

try:
    vk_session.authorization()
except vk_api.AuthorizationError as error_msg:
    print(error_msg)

vk = vk_session.get_api()
response = vk.messages.get(count=200)

#def CheckVK():
for i in response['items']:
    #read_state
    read = i['read_state']
    #print(read)
    if read == 0:
        #user_id
        UserId = i['user_id']
        info_user = vk.users.get(user_id=UserId)
        for s in info_user:
            first = s['first_name']
            last = s['last_name']
            all_ = str(first) + ' ' + str(last)
        #message
        text_message = i['body']
        message = i['id']
        #print(message)
        #response_2 = vk.messages.getDialogs()
        #print(response_2)
        print("Cообщение от: " + all_ + '\n' + str(text_message))
    else:
        print("No new message")
        break
#vk = vk.messages.send(user_id=40256795, message='test' )
