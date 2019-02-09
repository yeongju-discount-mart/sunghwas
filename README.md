![img1](https://i.imgur.com/qhoORPD.png)

[![Build Status](https://travis-ci.org/hw0k/vue-laravel-boilerplate.svg?branch=master)](https://travis-ci.org/hw0k/vue-laravel-boilerplate)

# Vue-Laravel Bolierplate

A Vue-Laravel Application which was made with Laravel Mix.

Laravel Mix를 활용하여 만든 Vue-Laravel Boilerplate입니다.

## Update Log

- 2018-12-27: Laravel Mix 4.0으로 업데이트

- 2018-11-30: Travis CI 연동

- 2018-11-28: HMR 기능 추가 및 기본 사용

## Installation

1. [Composer](https://getcomposer.org/download/)를 설치합니다.

2. [NPM](https://docs.npmjs.com/downloading-and-installing-node-js-and-npm)(혹은 [Yarn](https://yarnpkg.com/en/docs/install#windows-stable))을 설치합니다.

3. 이 레포지토리를 Clone합니다.

4. `.env.example` 파일을 `.env`로 변경합니다.

5. 다음 명령을 실행합니다.

   ```batch
   composer install
   ```

6. 다음 명령 중 하나를 실행합니다.

   ```batch
   npm install
   yarn install
   ```

7. 다음 명령을 실행합니다.

   ```batch
   php artisan key:generate
   ```

## Run App (HMR)

1. 다음 명령 중 하나를 실행합니다.

   ```batch
   npm run hot
   yarn hot
   ```

2. 다음 명령을 실행하여 서버를 구동합니다.

   ```batch
   php artisan serve
   ```

3. 콘솔에서 표시된 곳으로 접속합니다.

## Run App (Normal)

1. 다음 명령 중 하나를 실행합니다.

   ```batch
   npm run watch
   yarn watch
   ```

2. 다음 명령을 실행하여 서버를 구동합니다.

   ```batch
   php artisan serve
   ```

3. 콘솔에서 표시된 곳으로 접속합니다.

# Build App

1. 다음 명령 중 하나를 실행합니다.

   ```batch
   npm run production
   yarn production
   ```

2. 다음 명령을 실행하여 서버를 구동합니다.

   ```batch
   php artisan serve
   ```

3. 콘솔에서 표시된 곳으로 접속합니다.
