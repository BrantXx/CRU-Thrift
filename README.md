# CRU-Thrift

## Requirements
Thrift compiler **0.9.3+**, Java 8, Apache Ant, PHP 5.6.

## Installation

### Thrift From Source
https://thrift.apache.org/docs/install/

### After Installing Thrift
- Clone this repo
- Navigate into lib/java/
- Run ant

## Usage
  1. Generate Java thrift file
    - ``` thrift -out . --gen java Calculate.thrift ```
  2. Generate PHP thrift file
    - ``` thrift -out . --gen php Calculate.thrift ```
  3. Compile Java
    - ``` javac -cp "lib/java/build/lib/*:lib/java/build/*" *.java ```
  4. Run Server/Client
    - Java Server
      - ``` java -cp "lib/java/build/lib/*:lib/java/build:." Server ```
    - PHP Client
      - ``` php Client.php ```
