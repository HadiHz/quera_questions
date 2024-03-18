number = int(input())

bigNum = ""

counter = 1
while counter <= number:
    bigNum = bigNum + str(counter)
    counter = counter + 1

print(bigNum[number - 1])

