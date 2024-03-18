import math
def calculator(n, m, li):
    newList = []
    lengthOfNewList = math.ceil(n / float(m))
    #print(lengthOfNewList)
    for i in range(lengthOfNewList):
        first = m * i
        end = m * (i+1)
        #print(first)
        #print(end)
        if end > n:
            newList += [li[first:]]
            #print(li[first:])
        else:
            newList += [li[first:end]]
            #print(li[first:end])
    #print(newList)
    secondList = []
    for subL in newList:
        subSum = sum(subL)
        secondList += [subSum]

    
    result = 0
    for i in range(len(secondList)) :
        if i % 2 != 0:
            secondList[i] = secondList[i] * -1
            
        
            
    return sum(secondList)
