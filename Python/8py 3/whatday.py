"""
|--------------------------------------------------------------------------
| Return the day
|--------------------------------------------------------------------------
|
"""

def whatday(num):
   return ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"][num - 1] if 0 < num <= 7 else 'Wrong, please enter a number between 1 and 7'


def whatday(num):
   days = {
      1:'Sunday',
      2:'Monday',
      3:'Tuesday',
      4:'Wednesday',
      5:'Thursday',
      6:'Friday',
      7:'Saturday'
   }
   return days.get(num, 'Wrong, please enter a number between 1 and 7')


def whatday(num):
   match num:
      case 1: return "Sunday"
      case 2: return "Monday"
      case 3: return "Tuesday"
      case 4: return "Wednesday"
      case 5: return "Thursday"
      case 6: return "Friday"
      case 7: return "Saturday"
      case _ : return "Wrong, please enter a number between 1 and 7"


print(whatday(1), 'Sunday')
print(whatday(2), 'Monday')
print(whatday(3), 'Tuesday')
print(whatday(8), 'Wrong, please enter a number between 1 and 7')
print(whatday(20), 'Wrong, please enter a number between 1 and 7')
print(whatday(-1), 'Wrong, please enter a number between 1 and 7')