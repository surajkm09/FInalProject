while True:
    try:
        oldcount=count
        time.sleep(1)
        newcount=count
        diff=newcount-oldcount
        used = (diff/5.5)/60
        total_used=total_used+used
        update_useage(total_used)
    except KeyboardInterrupt:
        print '\ncaught keyboard interrupt!, bye'
        print(count)
        GPIO.cleanup()
        sys.exit()
def update_useage(useage):
    day+=useage
    month+=useage
    year+=useage
    sday = str(day)
    smonth = str(month)
    syear = str(year)
    contents = urllib2.urlopen("http://www.aryansuraj.xyz/test/functions.php?function=updateUseage&userid=suraj&appid=0&dayuseage="+sday+"&monthuseage="+smonth+"&yearuseage="+syear).read()
