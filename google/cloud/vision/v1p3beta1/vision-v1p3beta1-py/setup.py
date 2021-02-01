# -*- coding: utf-8 -*-

# Copyright 2020 Google LLC
#
# Licensed under the Apache License, Version 2.0 (the "License");
# you may not use this file except in compliance with the License.
# You may obtain a copy of the License at
#
#     http://www.apache.org/licenses/LICENSE-2.0
#
# Unless required by applicable law or agreed to in writing, software
# distributed under the License is distributed on an "AS IS" BASIS,
# WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
# See the License for the specific language governing permissions and
# limitations under the License.
#

import setuptools  # type: ignore


setuptools.setup(
    name='google-cloud-vision',
    version='0.0.1',
    packages=setuptools.PEP420PackageFinder.find(),
    namespace_packages=('google', 'google.cloud'),
    platforms='Posix; MacOS X; Windows',
    include_package_data=True,
    install_requires=(
        'google-api-core[grpc] >= 1.22.2, < 2.0.0dev',
        'libcst >= 0.2.5',
        'proto-plus >= 1.4.0',
    ),
    python_requires='>=3.6',
    scripts=[
        'scripts/fixup_vision_v1p3beta1_keywords.py',
    ],
    classifiers=[
        'Development Status :: 3 - Alpha',
        'Intended Audience :: Developers',
        'Operating System :: OS Independent',
        'Programming Language :: Python :: 3.6',
        'Programming Language :: Python :: 3.7',
        'Programming Language :: Python :: 3.8',
        'Topic :: Internet',
        'Topic :: Software Development :: Libraries :: Python Modules',
    ],
    zip_safe=False,
)
