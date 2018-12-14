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

Це спосіб делегування логіки створення обєкта (instantiation logic) дочірнім класам.
Іншими словами **фабричний метод** — це породжувальний патерн проектування, який визначає загальний інтерфейс для створення об’єктів у суперкласі, дозволяючи підкласам змінювати тип створюваних об’єктів.


```php
interface Interviewer
{
    public function askQuestions();
}

class Developer implements Interviewer
{
    public function askQuestions()
    {
        echo 'Asking about design patterns!';
    }
}

class CommunityExecutive implements Interviewer
{
    public function askQuestions()
    {
        echo 'Asking about community building';
    }
}

abstract class HiringManager
{

    // Фабричный метод
    abstract public function makeInterviewer(): Interviewer;

    public function takeInterview()
    {
        $interviewer = $this->makeInterviewer();
        $interviewer->askQuestions();
    }
}

class DevelopmentManager extends HiringManager
{
    public function makeInterviewer(): Interviewer
    {
        return new Developer();
    }
}

class MarketingManager extends HiringManager
{
    public function makeInterviewer(): Interviewer
    {
        return new CommunityExecutive();
    }
}
```

Використання:
 
 ```php
 $devManager = new DevelopmentManager();
 $devManager->takeInterview(); // Output: Asking about design patterns!
 
 $marketingManager = new MarketingManager();
 $marketingManager->takeInterview(); // Output: Asking about community building
    
 ```
 
#### Коли використовувати?
 
 
 Цей шаблон корисний для якихось загальних обробок в класі, але необхідні підкласи динамічно визначаються в ході виконання (runtime). Тобто коли клієнт не знає, який саме підклас може йому знадобитися.
 
 
 ###  Абстрактная фабрик
 
Це фабрика фабрик. Тобто фабрика, групує індивідуальні, але взаємопов'язані / взаємозалежні фабрики без вказівки для них конкретних класів.

**Wiki:** Шаблон «Абстрактна фабрика» описує спосіб інкапсулювання групи індивідуальних фабрик, об'єднаних якоюсь темою, без вказівки для них конкретних класів.

#### Приклад


Створення обєктів дверей

 ```php
interface Door
{
    public function getDescription();
}

class WoodenDoor implements Door
{
    public function getDescription()
    {
        echo 'I am a wooden door';
    }
}

class IronDoor implements Door
{
    public function getDescription()
    {
        echo 'I am an iron door';
    }
}
    
 ```

 Cтворення обєктів майстрів 
 
```php
interface DoorFittingExpert
{
public function getDescription();
}

class Welder implements DoorFittingExpert
{
public function getDescription()
{
    echo 'I can only fit iron doors';
}
}

class Carpenter implements DoorFittingExpert
{
public function getDescription()
{
    echo 'I can only fit wooden doors';
}
}
   
```

Ствоерння абстрактних фабрик
```php
interface DoorFactory
{
    public function makeDoor(): Door;
    public function makeFittingExpert(): DoorFittingExpert;
}

// Фабрика деревяних дверей вертає тесляра і деревяні двері 
class WoodenDoorFactory implements DoorFactory
{
    public function makeDoor(): Door
    {
        return new WoodenDoor();
    }

    public function makeFittingExpert(): DoorFittingExpert
    {
        return new Carpenter();
    }
}

// Фабрика металевих дверей вертає металеві двері і зварювальника
class IronDoorFactory implements DoorFactory
{
    public function makeDoor(): Door
    {
        return new IronDoor();
    }

    public function makeFittingExpert(): DoorFittingExpert
    {
        return new Welder();
    }
}
   
```

#### Коли використовувати

Коли у нас є взаємозв'язоки з не самою простою логікою створення (creation logic).
