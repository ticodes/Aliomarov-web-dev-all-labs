//были добавлены функции evaluate и clickHandler, и также назначены обработчики событий для кнопок


// Функция priority позволяет получить 
// значение приоритета для оператора.
// Возможные операторы: +, -, *, /.
function priority(operation) {
    if (operation == '+' || operation == '-') {
        return 1;
    } else {
        return 2;
    }
}

// Проверка, является ли строка str числом.
function isNumeric(str) {
    return /^\d+(\.\d+){0,1}$/.test(str);
}

// Проверка, является ли строка str цифрой.
function isDigit(str) {
    return /^\d{1}$/.test(str);
}

// Проверка, является ли строка str оператором.
function isOperation(str) {
    return /^[\+\-\*\/]{1}$/.test(str);
}

// Функция tokenize принимает один аргумент -- строку
// с арифметическим выражением и делит его на токены 
// (числа, операторы, скобки). Возвращаемое значение --
// массив токенов.
// Функция tokenize принимает один аргумент -- строку
// с арифметическим выражением и делит его на токены
// (числа, операторы, скобки). Возвращаемое значение --
// массив токенов.
function tokenize(str) {
    
    let tokens = [];
    let lastNumber = '';
    for (char of str) {
        // Если символ является цифрой или точкой (частью числа),
        // добавляем его к текущему числу.
        if (isDigit(char) || char == '.') {
            lastNumber += char;
        } else {
            // Если символ не является частью числа, но предыдущее
            // число не пусто, добавляем его в массив токенов и
            // сбрасываем lastNumber.
            if (lastNumber.length > 0) {
                tokens.push(lastNumber);
                lastNumber = '';
            }
        }

        // Если символ является оператором или скобкой, добавляем
        // его в массив токенов.
        if (isOperation(char) || char == '(' || char == ')') {
            tokens.push(char);
        }
    }

    // Если после завершения итерации осталось последнее число
    // (без оператора), добавляем его в массив токенов.
    if (lastNumber.length > 0) {
        tokens.push(lastNumber);
    }

    // Возвращаем массив токенов.
    return tokens;
}


// Функция compile принимает один аргумент -- строку
// с арифметическим выражением, записанным в инфиксной 
// нотации, и преобразует это выражение в обратную 
// польскую нотацию (ОПН). Возвращаемое значение -- 
// результат преобразования в виде строки, в которой 
// операторы и операнды отделены друг от друга пробелами. 
// Выражение может включать действительные числа, операторы 
// +, -, *, /, а также скобки. Все операторы бинарны и левоассоциативны.
// Функция реализует алгоритм сортировочной станции 
// (https://ru.wikipedia.org/wiki/Алгоритм_сортировочной_станции).
function compile(str) {
    let out = [];
    let stack = [];
    for (token of tokenize(str)) {
        if (isNumeric(token)) {
            out.push(token);
        } else if (isOperation(token)) {
            while (stack.length > 0 && isOperation(stack[stack.length - 1]) && priority(stack[stack.length - 1]) >= priority(token)) {
                out.push(stack.pop());
            }
            stack.push(token);
        } else if (token == '(') {
            stack.push(token);
        } else if (token == ')') {
            while (stack.length > 0 && stack[stack.length - 1] != '(') {
                out.push(stack.pop());
            }
            stack.pop();
        }
    }
    while (stack.length > 0) {
        out.push(stack.pop());
    }
    return out.join(' ');
}

// Функция evaluate принимает один аргумент -- строку 
// с арифметическим выражением, записанным в обратной 
// польской нотации. Возвращаемое значение -- результат 
// вычисления выражения. Выражение может включать 
// действительные числа и операторы +, -, *, /.
function evaluate(str) {
    let stack = [];
    const tokens = str.split(' ');
    
    for (token of tokens) {
        if (isNumeric(token)) {
            stack.push(parseFloat(token));
        } else if (isOperation(token)) {
            if (stack.length < 2) {
                return "Error";
            }
            const b = stack.pop();
            const a = stack.pop();
            let result;
            if (token === '+') {
                result = a + b;
            } else if (token === '-') {
                result = a - b;
            } else if (token === '*') {
                result = a * b;
            } else if (token === '/') {
                if (b === 0) {
                    return "Error";
                }
                result = a / b;
            }
            stack.push(result);
        }
    }
    
    if (stack.length !== 1) {
        return "Error";
    }
    
    return stack[0].toFixed(2);
}

// Функция clickHandler предназначена для обработки 
// событий клика по кнопкам калькулятора. 
// По нажатию на кнопки с классами digit, operation и bracket
// на экране (элемент с классом screen) должны появляться 
// соответствующие нажатой кнопке символы.
// По нажатию на кнопку с классом clear содержимое экрана 
// должно очищаться.
// По нажатию на кнопку с классом result на экране 
// должен появиться результат вычисления введённого выражения 
// с точностью до двух знаков после десятичного разделителя (точки).
// Реализуйте эту функцию. Воспользуйтесь механизмом делегирования 
// событий (https://learn.javascript.ru/event-delegation), чтобы 
// не назначать обработчик для каждой кнопки в отдельности.

function clickHandler(event) {
    // Получаем ссылку на элемент экрана калькулятора.
    const screen = document.querySelector('.screen span');

    // Получаем ссылку на кнопку, по которой был клик.
    const button = event.target;

    // Проверяем класс кнопки, чтобы определить её тип.
    if (button.classList.contains('digit') || button.classList.contains('operation') || button.classList.contains('bracket')) {
        // Если кнопка является цифрой, оператором или скобкой, добавляем символ кнопки к содержимому экрана.
        screen.textContent += button.textContent;
    } else if (button.classList.contains('clear')) {
        // Если кнопка с классом clear, очищаем содержимое экрана.
        screen.textContent = '';
    } else if (button.classList.contains('result')) {
        // Если нажата кнопка с классом result, выполняем вычисления.

        // Получаем выражение с экрана.
        const expression = screen.textContent;

        // Преобразуем инфиксное выражение в ОПН.
        const rpn = compile(expression);

        // Вычисляем результат.
        const result = evaluate(rpn);

        // Отображаем результат на экране с точностью до двух знаков после десятичной точки.
        screen.textContent = result;
    }
}

// Назначьте нужные обработчики событий.
window.onload = function () {
    const buttons = document.querySelector('.buttons');
    buttons.addEventListener('click', clickHandler);
}
