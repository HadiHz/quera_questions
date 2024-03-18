'''
number = input()
number = int(number)
if number == 1:
    print(2)
else :
    print(3)

'''
from datetime import datetime
s1 = '10:33:26'
s2 = '10:33:26' # for example
FMT = '%H:%M:%S'
tdelta = datetime.strptime(s2, FMT) - datetime.strptime(s1, FMT)

if tdelta.days < 0:
    tdelta = timedelta(
        days=0,
        seconds=tdelta.seconds,
        microseconds=tdelta.microseconds
    )

    
