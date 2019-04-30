## 성화야 생일 축하해 ♥

```php
$birthdayEndsAt = new DateTime(03/03/2019);
    
$birthdayEndsAt->format('U');
    
while (true) {
    giveCongratulationsToSunghwa();
    if(time(now) == $birthdayEndsAt) break;
}
```
