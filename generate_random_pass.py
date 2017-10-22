import random, string

for i in range(8):
  rid = ''
  for x in range(8): rid += random.choice(string.ascii_letters + string.digits)
  print(rid)
