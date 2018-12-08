# Шаблони проектування  (Паттерни). Приклади на PHP
Патерни (або шаблони) проектування описують типові способи вирішення поширених проблем при проектуванні програм.

### Види шаблонів проектування 


TODO добавить ссылки 
- Породжувальні
- Структурні
- Поведінкові


## Порождающие шаблоны проектирования

Породжувальні паттерни описують створення (instantiate)  обєкуту або групу зв'язаних обєктів, інакшими словами відповідають за зручне та безпечне створення нових об’єктів або навіть цілих сімейств об’єктів.


**Wiki:**  Породжуючі шаблони (англ. Creational patterns) — це шаблони проектування, що абстрагують процес побудови об'єктів. Вони допоможуть зробити систему незалежною від способу створення, композиції та представлення її об'єктів.

- Проста фабрика
- Фабричний метод



###  Проста фабрика

Проста фабрика просто генерить екземпляр для клієнта без представлення якоїн-небудь логіки самого екземпляра 


```php
interface Door
{
    public function getWidth(): float;
    public function getHeight(): float;
}

class WoodenDoor implements Door
{
    protected $width;
    protected $height;

    public function __construct(float $width, float $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    public function getWidth(): float
    {
        return $this->width;
    }

    public function getHeight(): float
    {
        return $this->height;
    }
}
```

Тепер створим фабрику 

```php
class DoorFactory
{
    public static function makeDoor($width, $height): Door
    {
        return new WoodenDoor($width, $height);
    }
}

```

Використання: 
```php
$door = DoorFactory:makeDoor(100, 200);
echo 'Width: ' . $door->getWidth();
echo 'Height: ' . $door->getHeight();

```

#### Коли використовувати?

Коли створення об'єкта має на увазі якусь логіку, а не просто кілька присвоювань, то має сенс делегувати завдання виділеній фабриці, а не повторювати всюди один і той же код.



###  Фабричний метод

Це спосіб делегування логіки створення обєкта (instantiation logic) дочірнім класам