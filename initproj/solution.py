class FactorHandler:

    def __init__(self):
        self.factors = []
        pass

    def add_factor(self, time_format, time, value):
        self.factors.append(Factor(time_format, time, value))
        
                       
    def remove_all_factors(self, time_format, time):
        factor = Factor(time_format, time, 0)
        index = 0
        for fc in self.factors:
            print(fc.day, factor.day)
            print(fc.month, factor.month)
            print(fc.year, factor.year)
            if fc.day == factor.day and fc.month == factor.month and fc.year == factor.day:
                self.factors.remove(index)
            index = index + 1

    def get_sum(self, time_format, start_time, finish_time):
        pass


class Factor:
    
    def __init__(self, time_format, time, value):
        self.day = 0
        self.year = 0
        self.month = 0
        self.time_format = time_format
        self.time = time
        self.value = value
        self.setDayMonthYear()

    def setDayMonthYear(self):
        print(self.time_format)
        if self.time_format == 'dd/mm/yyyy‍'.replace('\u200d',''):
            print(654)
            self.day = self.time[:2]
            self.month = self.time[3:5]
            self.year = self.time[6:]
        if self.time_format == "dd/yyyy‍/mm".replace('\u200d',''):
            self.day = self.time[:2]
            self.year = self.time[3:7]
            self.month = self.time[8:]
        if self.time_format == "yyyy‍/mm/dd".replace('\u200d',''):
            self.year = self.time[:4]
            self.month = self.time[5:7]
            self.day = self.time[8:]
        if self.time_format == "yyyy‍/dd/mm".replace('\u200d',''):
            self.day = self.time[:4]
            self.day = self.time[6:7]
            self.month = self.time[8:]
        if self.time_format == "mm/yyyy‍/dd".replace('\u200d',''):
            self.month = self.time[:2]
            self.year = self.time[3:7]
            self.day = self.time[8:]
        if self.time_format == "mm/dd/yyyy‍".replace('\u200d',''):
            self.month = self.time[:2]
            self.day = self.time[3:5]
            self.year = self.time[6:]

        self.day = int(self.day)
        self.month = int(self.month)
        self.year = int(self.year)

fh = FactorHandler()
fh.add_factor("dd/mm/yyyy", "02/10/2019", 10)
fh.add_factor("dd/mm/yyyy", "03/10/2019", 20)
fh.add_factor("dd/mm/yyyy", "03/10/2019", 30)
fh.add_factor("dd/mm/yyyy", "05/10/2019", 5)
