handsfreeA = input()
handsfreeB = input()

handsfreeA = handsfreeA.split(' ')
handsfreeB = handsfreeB.split(' ')

if handsfreeA[0] == handsfreeA[1]:
    print("YES")
elif handsfreeB[0] == handsfreeB[1]:
    print("YES")
elif handsfreeA[0] == handsfreeB[1]:
    print("YES")
elif handsfreeB[0] == handsfreeA[1]:
    print("YES")
else:
    print("NO")

