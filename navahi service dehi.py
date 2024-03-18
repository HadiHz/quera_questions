
numberOfShops = int(input())
servicedAreas = []

for i in range(numberOfShops):
    line = input()
    line = line.split(" ")
    start = int(line[0])
    end = int(line[1])
    servicedAreas.append([start, end])

queriedStart = int(input())
queriedend = int(input())

canBeServiced = False
counter = 0
for i in range(queriedStart, queriedend + 1):
    counter = counter + 1
    trues = 0
    for serviceArea in servicedAreas:
        if i >= serviceArea[0] and i <= serviceArea[1]:
            trues = trues + 1
    if trues == 0:
        trues = -1
        print("false")
        break

if trues != -1:
    print("true")
