import csv
with open('train.csv',encoding="utf8") as csv_file:
    csv_reader = csv.reader(csv_file, delimiter=',')
    line_count = 0
    column_names = []
    data = []
    for row in csv_reader:
        if line_count == 0:
            column_names = row
        else:
            data.append(row) 
        line_count += 1
    print(f'Processed {line_count} lines.')


def numberOfPlayers():
    players =[]
    for row in data:
        players.append(row[1])
    list_set = set(players)
    unique_list = (list(list_set))
    return len(unique_list)

def playersStatistics():
    players = {}
    for row in data:
        player_id = row[1]
        if row[-1] == 'گُل': 
            if players.get(player_id) is not None:
                players[player_id] = players[player_id] + 1
            else:
                players[player_id] = 1
    pls = {k: v for k, v in sorted(players.items(), key=lambda item: item[1])}
    pls = list(pls.keys())
    return pls[-1]

def playersStatistics2():
    players = {}
    for row in data:
        player_id = row[1]
        if players.get(player_id) is not None:
            if row[-1] == 'گُل':
                players[player_id][0] = players[player_id][0] + 1
            else:
                players[player_id][1] = players[player_id][1] + 1
        else:
            if row[-1] == 'گُل':
                players[player_id] = [1 , 0]
            else:
                players[player_id] = [0 , 1]
    rate = {}
    for player_id in players:
        rate[player_id] = players[player_id][0] / float(players[player_id][1])
    pls = {k: v for k, v in sorted(rate.items(), key=lambda item: item[1])}
    pls = list(pls.keys())
    return (pls[0], pls[-1])

def longestShot():
    distances = []
    for row in data:
        x = float(row[4])
        y = float(row[5])
        d = (x**2 + y**2)**0.5
        distances.append(d)
    return int(max(distances))

#def mostGoalScorer():
    

print('number of players: ' + str(numberOfPlayers()))
print('Most Goal Scorer: ' + str(playersStatistics()))
print('Best Shot Rate: ' + str(playersStatistics2()[1]) + ' Worst Shot Rate: ' + str(playersStatistics2()[0]))
print('longest shot: ' + str(longestShot()))
